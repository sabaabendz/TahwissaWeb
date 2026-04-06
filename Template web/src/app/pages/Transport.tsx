import { motion } from "motion/react";
import { useState } from "react";
import { Bus, Train, Plane, Car, Clock, MapPin, ArrowRight } from "lucide-react";
import { ImageWithFallback } from "../components/figma/ImageWithFallback";

export function Transport() {
  const [selectedType, setSelectedType] = useState("all");

  const transportTypes = [
    { id: "all", label: "Tous", icon: MapPin, color: "from-gray-400 to-gray-600" },
    { id: "bus", label: "Bus", icon: Bus, color: "from-blue-400 to-blue-600" },
    { id: "train", label: "Train", icon: Train, color: "from-purple-400 to-purple-600" },
    { id: "plane", label: "Avion", icon: Plane, color: "from-sky-400 to-sky-600" },
    { id: "car", label: "Voiture", icon: Car, color: "from-green-400 to-green-600" },
  ];

  const transports = [
    {
      id: 1,
      type: "bus",
      title: "Bus Express Paris-Lyon",
      from: "Paris",
      to: "Lyon",
      departure: "08:30",
      arrival: "14:45",
      duration: "6h 15min",
      price: "€35",
      image: "https://images.unsplash.com/photo-1761760178065-f45ba583a014?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBidXMlMjB0cmFuc3BvcnRhdGlvbnxlbnwxfHx8fDE3NzUyMjQzOTZ8MA&ixlib=rb-4.1.0&q=80&w=1080",
      seats: "23 places disponibles",
    },
    {
      id: 2,
      type: "train",
      title: "TGV Grande Vitesse",
      from: "Paris",
      to: "Marseille",
      departure: "10:15",
      arrival: "13:30",
      duration: "3h 15min",
      price: "€89",
      image: "https://images.unsplash.com/photo-1713918308760-5c9a02a8ca46?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoaWdoJTIwc3BlZWQlMjB0cmFpbnxlbnwxfHx8fDE3NzUyMDMyNDB8MA&ixlib=rb-4.1.0&q=80&w=1080",
      seats: "12 places disponibles",
    },
    {
      id: 3,
      type: "plane",
      title: "Vol Direct Air France",
      from: "Paris CDG",
      to: "New York JFK",
      departure: "14:00",
      arrival: "16:30",
      duration: "8h 30min",
      price: "€450",
      image: "https://images.unsplash.com/photo-1750548546278-6d54b82b7d36?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhaXJwbGFuZSUyMGZseWluZyUyMHNreXxlbnwxfHx8fDE3NzUxOTMwNjJ8MA&ixlib=rb-4.1.0&q=80&w=1080",
      seats: "45 places disponibles",
    },
    {
      id: 4,
      type: "car",
      title: "Location Taxi Premium",
      from: "Aéroport Nice",
      to: "Monaco",
      departure: "Flexible",
      arrival: "Flexible",
      duration: "45min",
      price: "€65",
      image: "https://images.unsplash.com/photo-1652270625079-83dd767498db?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0YXhpJTIwY2FyJTIwc2VydmljZXxlbnwxfHx8fDE3NzUyMjQzOTd8MA&ixlib=rb-4.1.0&q=80&w=1080",
      seats: "4 passagers max",
    },
  ];

  const filteredTransports = selectedType === "all" 
    ? transports 
    : transports.filter(t => t.type === selectedType);

  return (
    <div className="container mx-auto px-6 py-12">
      {/* Header */}
      <motion.div
        initial={{ opacity: 0, y: -20 }}
        animate={{ opacity: 1, y: 0 }}
        className="mb-12"
      >
        <h1 className="text-5xl font-bold text-white mb-4 drop-shadow-lg">
          Transport
        </h1>
        <p className="text-xl text-white/90 drop-shadow-md">
          Réservez vos billets de bus, train, avion ou voiture
        </p>
      </motion.div>

      {/* Transport Type Filter */}
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 0.2 }}
        className="mb-8 flex flex-wrap gap-3"
      >
        {transportTypes.map((type, index) => {
          const Icon = type.icon;
          const isActive = selectedType === type.id;
          
          return (
            <motion.button
              key={type.id}
              initial={{ opacity: 0, scale: 0 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.1 * index, type: "spring" }}
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              onClick={() => setSelectedType(type.id)}
              className={`px-6 py-3 rounded-2xl font-semibold shadow-lg transition-all ${
                isActive
                  ? `bg-gradient-to-r ${type.color} text-white`
                  : "bg-white/90 backdrop-blur-md text-gray-700 hover:bg-white"
              }`}
            >
              <div className="flex items-center gap-2">
                <Icon className="w-5 h-5" />
                <span>{type.label}</span>
              </div>
            </motion.button>
          );
        })}
      </motion.div>

      {/* Transport Cards */}
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {filteredTransports.map((transport, index) => {
          const TypeIcon = transportTypes.find(t => t.id === transport.type)?.icon || Bus;
          
          return (
            <motion.div
              key={transport.id}
              initial={{ opacity: 0, y: 50 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.1 * index }}
              whileHover={{ scale: 1.02, y: -5 }}
              className="bg-white/90 backdrop-blur-md rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all"
            >
              <div className="flex flex-col md:flex-row">
                {/* Image */}
                <div className="relative w-full md:w-48 h-48 md:h-auto overflow-hidden">
                  <motion.div
                    whileHover={{ scale: 1.1 }}
                    transition={{ duration: 0.6 }}
                    className="w-full h-full"
                  >
                    <ImageWithFallback
                      src={transport.image}
                      alt={transport.title}
                      className="w-full h-full object-cover"
                    />
                  </motion.div>
                  
                  {/* Type Badge */}
                  <motion.div
                    initial={{ scale: 0 }}
                    animate={{ scale: 1 }}
                    className="absolute top-4 left-4 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg"
                  >
                    <TypeIcon className="w-6 h-6 text-blue-600" />
                  </motion.div>
                </div>

                {/* Content */}
                <div className="flex-1 p-6">
                  <h3 className="text-xl font-bold text-gray-800 mb-4">
                    {transport.title}
                  </h3>

                  {/* Route */}
                  <div className="flex items-center gap-3 mb-4">
                    <div className="flex-1">
                      <div className="text-sm text-gray-500">Départ</div>
                      <div className="font-semibold text-gray-800">{transport.from}</div>
                      <div className="text-sm text-blue-600">{transport.departure}</div>
                    </div>
                    
                    <motion.div
                      animate={{ x: [0, 5, 0] }}
                      transition={{ duration: 2, repeat: Infinity }}
                    >
                      <ArrowRight className="w-6 h-6 text-blue-600" />
                    </motion.div>
                    
                    <div className="flex-1 text-right">
                      <div className="text-sm text-gray-500">Arrivée</div>
                      <div className="font-semibold text-gray-800">{transport.to}</div>
                      <div className="text-sm text-blue-600">{transport.arrival}</div>
                    </div>
                  </div>

                  {/* Details */}
                  <div className="flex items-center gap-4 mb-4 text-sm text-gray-600">
                    <div className="flex items-center gap-2">
                      <Clock className="w-4 h-4" />
                      <span>{transport.duration}</span>
                    </div>
                    <div className="flex items-center gap-2">
                      <MapPin className="w-4 h-4" />
                      <span>{transport.seats}</span>
                    </div>
                  </div>

                  {/* Price and Action */}
                  <div className="flex items-center justify-between pt-4 border-t border-gray-200">
                    <div className="text-3xl font-bold text-blue-600">
                      {transport.price}
                    </div>
                    
                    <motion.button
                      whileHover={{ scale: 1.05 }}
                      whileTap={{ scale: 0.95 }}
                      className="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl font-semibold shadow-lg"
                    >
                      Réserver
                    </motion.button>
                  </div>
                </div>
              </div>
            </motion.div>
          );
        })}
      </div>

      {/* Floating Animation */}
      <motion.div
        className="fixed bottom-8 right-8"
        initial={{ scale: 0, rotate: -180 }}
        animate={{ scale: 1, rotate: 0 }}
        transition={{ delay: 0.8, type: "spring" }}
      >
        <motion.div
          animate={{ y: [0, -10, 0] }}
          transition={{ duration: 2, repeat: Infinity }}
          className="bg-gradient-to-r from-blue-500 to-blue-700 p-4 rounded-full shadow-2xl cursor-pointer"
        >
          <Plane className="w-8 h-8 text-white" />
        </motion.div>
      </motion.div>
    </div>
  );
}
